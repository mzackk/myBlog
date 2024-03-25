<?php
/*
language : Malaysia
*/
return [
    'title' => [
        'index' => 'Penyiaran',
        'create' => 'Tambah penyiaran',
        'edit' => 'Ubah penyiaran',
        'detail' => 'Butiran penyiaran',
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Data penyiaran belum ada",
            'search' => "Judul penyiaran :keyword tidak dijumpai",
            ]
    ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'Judul',
                'placeholder' => 'Masukkan judul',
                'attribute' => 'judul'
            ],
            'slug' => [
                'label' => 'Slug',
                'placeholder' => 'Dibuatkan secara automatik',
                'attribute' => 'slug'
            ],
            'thumbnail' => [
                'label' => 'Imej Pilihan',
                'placeholder' => 'Cari imej pilihan',
                'attribute' => 'thumbnail'
            ],
            'category' => [
                'label' => 'Kategori',
                'placeholder' => 'Pilih kategori',
                'attribute' => 'kategori'
            ],
            'search' => [
                'label' => 'Carian',
                'placeholder' => 'Cari penyiaran',
                'attribute' => 'carian'
            ]
        ],
        'select' => [
            'tag' => [
                'label' => 'Tag',
                'placeholder' => 'Masukkan tag',
                'attribute' => 'tag',
                'option' => [
                    'publish' => 'Terbitkan',
                    'draft' => 'Draf'
                ]
            ],
            'status' => [
                'label' => 'Status',
                'placeholder' => 'Pilih status',
                'attribute' => 'status',
                'option' => [
                    'draft' => 'Draf',
                    'publish' => 'Terbitkan',
                ]
            ],
        ],
        'textarea' => [
            'description' => [
                'label' => 'Deskripsi',
                'placeholder' => 'Masukkan deskripsi',
                'attribute' => 'deskripsi'
            ],
            'content' => [
                'label' => 'Kandungan',
                'placeholder' => 'Masukkan kandungan',
                'attribute' => 'kandungan'
            ],
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
        'browse' => [
            'value' => 'Semak'
        ],
        'back' => [
            'value' => 'Kembali'
        ],
        'apply' => [
            'value' => 'Terapkan'
        ]
    ],
    'alert' => [
        'create' => [
            'title' => "Tambah penyiaran",
            'message' => [
                'success' => "Penyiaran berjaya disimpan.",
                'error' => "Ralat berlaku semasa menyimpan penyiaran. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah penyiaran',
            'message' => [
                'success' => "Penyiaran berjaya dikemaskini.",
                'error' => "Ralat berlaku semasa mengemaskini penyiaran. :error"
            ]
        ],
        'delete' => [
            'title' => 'Padam penyiaran',
            'message' => [
                'confirm' => "Adakah anda pasti untuk memadam penyiaran :title ?",
                'success' => "Penyiaran berjaya dipadam",
                'error' => "Ralat berlaku semasa memadam penyiaran. :error"
            ]
        ],
    ]
];
