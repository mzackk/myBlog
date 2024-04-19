<?php
/*
language : Malaysia
*/
return [
    'title' => [
        'index' => 'Peranan',
        'create' => 'Tambah peranan',
        'edit' => 'Ubah peranan',
        'detail' => 'Butiran peranan',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Nama',
                'placeholder' => 'Masukkan nama',
                'attribute' => 'nama'
            ],
            'permission' => [
                'label' => 'Kebenaran',
                'placeholder' => 'Pilih kebenaran',
                'attribute' => 'kebenaran'
            ],
            'search' => [
                'label' => 'Carian',
                'placeholder' => 'Cari peranan',
                'attribute' => 'carian'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Peranan Belum Tersedia!",
            'search' => "Peranan :keyword tidak dijumpai",
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
        'back' => [
            'value' => 'Kembali'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Tambah peranan',
            'message' => [
                'success' => "Peranan berjaya disimpan.",
                'error' => "Ralat berlaku semasa menyimpan peranan. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah peranan',
            'message' => [
                'success' => "Peranan berjaya dikemaskini.",
                'error' => "Ralat berlaku semasa mengemaskini peranan. :error"
            ]
        ],
        'delete' => [
            'title' => 'Padam peranan',
            'message' => [
                'confirm' => "Adakah anda pasti untuk memadam peranan :name?",
                'success' => "Peranan berjaya dipadam.",
                'error' => "Ralat berlaku semasa memadam peranan. :error",
                'warning' => "Maaf, peranan :name tidak dapat dipadamkan kerana masih digunakan."
            ]
        ],
    ]
];
