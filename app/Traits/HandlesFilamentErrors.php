<?php

namespace App\Traits;

use Illuminate\Database\QueryException;
use Filament\Notifications\Notification;

trait HandlesFilamentErrors
{
    /**
     * Handle database exceptions and show user-friendly notifications
     */
    protected function handleRecordCreationError(\Throwable $exception): void
    {
        $this->handleDatabaseError($exception, 'Membuat');
    }

    /**
     * Handle database exceptions for update operations
     */
    protected function handleRecordUpdateError(\Throwable $exception): void
    {
        $this->handleDatabaseError($exception, 'Memperbarui');
    }

    /**
     * Main error handler for database operations
     */
    private function handleDatabaseError(\Throwable $exception, string $action): void
    {
        if ($exception instanceof QueryException) {
            $errorCode = $exception->errorInfo[1] ?? null;
            $errorMessage = $exception->getMessage();

            // Handle duplicate entry errors (MySQL error code 1062)
            if ($errorCode === 1062 || str_contains($errorMessage, 'Duplicate entry')) {
                $this->handleDuplicateError($errorMessage);
                return;
            }

            // Handle foreign key constraint errors (MySQL error code 1452)
            if ($errorCode === 1452 || str_contains($errorMessage, 'foreign key constraint')) {
                Notification::make()
                    ->danger()
                    ->title('Gagal ' . $action . ' data')
                    ->body('Data yang direferensikan tidak ditemukan. Pastikan semua relasi sudah benar.')
                    ->persistent()
                    ->send();
                return;
            }

            // Handle data too long errors (MySQL error code 1406)
            if ($errorCode === 1406 || str_contains($errorMessage, 'Data too long')) {
                Notification::make()
                    ->danger()
                    ->title('Gagal ' . $action . ' data')
                    ->body('Data yang dimasukkan terlalu panjang untuk kolom yang tersedia.')
                    ->persistent()
                    ->send();
                return;
            }

            // Handle NULL constraint violations
            if (str_contains($errorMessage, 'cannot be null') || str_contains($errorMessage, 'NOT NULL')) {
                Notification::make()
                    ->danger()
                    ->title('Gagal ' . $action . ' data')
                    ->body('Beberapa field wajib belum diisi. Pastikan semua field yang diperlukan sudah terisi.')
                    ->persistent()
                    ->send();
                return;
            }
        }

        // Generic error fallback
        Notification::make()
            ->danger()
            ->title('Terjadi error ketika ' . $action . ' data')
            ->body($this->getReadableErrorMessage($exception))
            ->persistent()
            ->send();
    }

    /**
     * Handle duplicate entry errors with specific field detection
     */
    private function handleDuplicateError(string $errorMessage): void
    {
        $field = 'data';
        $value = '';

        // Extract field name from error message
        // Format: "Duplicate entry 'value' for key 'table.field'"
        if (preg_match("/Duplicate entry '(.+?)' for key '.*?\.(.+?)'/", $errorMessage, $matches)) {
            $value = $matches[1];
            $field = $matches[2];
        } elseif (preg_match("/Duplicate entry '(.+?)'/", $errorMessage, $matches)) {
            $value = $matches[1];
        }

        // Translate field names to Indonesian
        $fieldTranslations = [
            'slug' => 'Slug',
            'email' => 'Email',
            'username' => 'Username',
            'name' => 'Nama',
            'code' => 'Kode',
            'phone' => 'Nomor Telepon',
            'nik' => 'NIK',
            'nim' => 'NIM',
        ];

        $translatedField = $fieldTranslations[$field] ?? ucfirst($field);

        Notification::make()
            ->danger()
            ->title('Data sudah ada')
            ->body("{$translatedField} '{$value}' sudah digunakan. Silakan gunakan {$translatedField} yang berbeda.")
            ->persistent()
            ->send();
    }

    /**
     * Get a readable error message from exception
     */
    private function getReadableErrorMessage(\Throwable $exception): string
    {
        $message = $exception->getMessage();

        // Remove SQL query from error message for cleaner display
        if (str_contains($message, 'SQL:')) {
            $message = substr($message, 0, strpos($message, 'SQL:'));
        }

        // Limit message length
        if (strlen($message) > 200) {
            $message = substr($message, 0, 200) . '...';
        }

        return trim($message);
    }
}
