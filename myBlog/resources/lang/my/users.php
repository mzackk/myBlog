<?php
/*
language : Malay
*/
return [
    'title' => [
        'index' => 'Pengguna',
        'create' => 'Tambah pengguna',
        'edit' => 'Ubah pengguna',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Nama',
                'placeholder' => 'Masukkan nama',
                'attribute' => 'nama'
            ],
            'email' => [
                'label' => 'Emel',
                'placeholder' => 'Masukkan emel',
                'attribute' => 'emel'
            ],
            'password' => [
                'label' => 'Kata Laluan',
                'placeholder' => 'Masukkan kata laluan',
                'attribute' => 'kata laluan'
            ],
            'password_confirmation' => [
                'label' => 'Pengesahan Kata Laluan',
                'placeholder' => 'Taip semula kata laluan',
                'attribute' => 'pengesahan kata laluan'
            ],
            'search' => [
                'label' => 'Carian',
                'placeholder' => 'Cari pengguna',
                'attribute' => 'carian'
            ]
        ],
        'select' => [
            'role' => [
                'label' => 'Peranan',
                'placeholder' => 'Pilih peranan',
                'attribute' => 'peranan'
            ]
        ]
    ],
    'label' => [
        'name' => 'Nama',
        'email' => 'Emel',
        'role' => 'Peranan',
        'no_data' => [
            'fetch' => "Tiada data pengguna lagi",
            'search' => "Pengguna :keyword tidak dijumpai",
        ]
    ],
    'button' => [
        'create' => [
            'value' => 'Tambah'
        ],
        'save' => [
            'value' => 'Simpan'
        ],
        'edit' => [
            'value' => 'Ubah'
        ],
        'delete' => [
            'value' => 'Padam'
        ],
        'cancel' => [
            'value' => 'Batal'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Tambah pengguna',
            'message' => [
                'success' => "Pengguna berjaya disimpan.",
                'error' => "Ralat berlaku semasa menyimpan pengguna. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah pengguna',
            'message' => [
                'success' => "Pengguna berjaya dikemaskini.",
                'error' => "Ralat berlaku semasa mengemaskini pengguna. :error"
            ]
        ],
        'delete' => [
            'title' => 'Padam pengguna',
            'message' => [
                'confirm' => "Adakah anda pasti untuk memadam pengguna :name?",
                'success' => "Pengguna berjaya dipadam.",
                'error' => "Ralat berlaku semasa memadam pengguna. :error"
            ]
        ],
    ]
];
