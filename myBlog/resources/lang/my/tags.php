<?php
/*
language : Malaysia
*/
return [
    'title' => [
        'index' => 'Tag',
        'create' => 'Tambah tag',
        'edit' => 'Ubah tag',
    ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'Tajuk',
                'placeholder' => 'Masukkan tajuk',
                'attribute' => 'tajuk'
            ],
            'slug' => [
                'label' => 'Slug',
                'placeholder' => 'Dibuatkan secara automatik',
                'attribute' => 'slug'
            ],
            'search' => [
                'label' => 'Carian',
                'placeholder' => 'Cari tag',
                'attribute' => 'carian'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Data tag belum ada",
            'search' => "Tag :keyword tidak dijumpai",
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
            'title' => "Tambah tag",
            'message' => [
                'success' => "Tag berjaya disimpan.",
                'error' => "Ralat berlaku semasa menyimpan tag. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah tag',
            'message' => [
                'success' => "Tag berjaya dikemaskini.",
                'error' => "Ralat berlaku semasa mengemaskini tag. :error"
            ]
        ],
        'delete' => [
            'title' => 'Hapus tag',
            'message' => [
                'confirm' => "Adakah anda pasti untuk memadam tag :title ?",
                'success' => "Tag berjaya dipadam",
                'error' => "Ralat berlaku semasa memadam tag. :error"
            ]
        ],
    ]
];
