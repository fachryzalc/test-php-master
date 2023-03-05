<?php

namespace Fundamentals;

class ArrayTest
{
    /**
     * ********************************************************************************************************
     * Buatlah fungsi untuk mengolah data berdasarkan index dari array
     * 1. Kembalikan data email dari semua data users
     * 2. Kembalikan data berdasarkan kolom yang di inginkan, misal data yang harus dikembalikan nama dan email
     *    dari semua data user.
     * ********************************************************************************************************
     */

    /**
     * Define users
     * @var array
     */
    public $users;

    /**
     * Set default value of users
     * @return void
     */
    public function __construct()
    {
        $this->users = $this->users();
    }

    /**
     * Get all users data
     * @return array
     */
    public function users(): array
    {
        return [
            [
                "name" => "Celia Gottlieb",
                "email" => "cstokes@example.com",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "778KKkJlCO",
            ],
            [
                "name" => "Yasmin Mueller",
                "email" => "kelsi.wolff@example.org",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "eZi2bcqcJt",
            ],
            [
                "name" => "Burdette Gaylord",
                "email" => "bernice.goyette@example.com",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "uzj6AX5QcS",
            ],
            [
                "name" => "Ashtyn Davis",
                "email" => "paxton91@example.net",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "e8L1lcnOb4",
            ],
            [
                "name" => "Susana Connelly",
                "email" => "halie.mitchell@example.com",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "zCrsOGJDZB",
            ],
            [
                "name" => "Mr. Edd Haag Sr.",
                "email" => "kelton51@example.com",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "rD78JxxEeE",
            ],
            [
                "name" => "Daren Nikolaus",
                "email" => "maurine97@example.com",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "0qyuMf4fCI",
            ],
            [
                "name" => "Domenico Dickens",
                "email" => "dhane@example.com",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "JSgXGAQOXf",
            ],
            [
                "name" => "Mrs. Veronica Harris Sr.",
                "email" => "daugherty.keyon@example.org",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "7de8xxWhzc",
            ],
            [
                "name" => "Lulu Goodwin",
                "email" => "jmurray@example.net",
                "email_verified_at" => "2023-02-21",
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "remember_token" => "BXp61wGzDr",
            ],
        ];
    }

    /**
     * Get single column from given request
     *
     * @param string $request
     * @return array
     */
    public function singleRequest(string $request): array
    {
        foreach ($this->users as $k => $v) {
            $data[$k] = $v['email'];
        }
        return $data;
    }

    /**
     * Get multiple column from given request
     *
     * @param  array $request
     * @return array
     */
    public function multipleRequest(array $request): array
    {
        foreach ($this->users as $k => $v) {
            $data[$k] = [
                "name" => $v['name'],
                "email" => $v['email']
            ];
        }
        return $data;
    }
}
