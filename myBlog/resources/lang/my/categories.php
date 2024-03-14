<?php
/*
language : Malay
*/
return [
  'title' => [
    'index' => 'Kategori',
    'create' => 'Tambah kategori',
    'edit' => 'Ubah kategori',
    'detail' => 'Detail kategori',
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
        'placeholder' => 'Dibuat secara automatik',
        'attribute' => 'slug'
      ],
      'thumbnail' => [
        'label' => 'Thumbnail',
        'placeholder' => 'Carian thumbnail',
        'attribute' => 'thumbnail'
      ],
      'search' => [
        'label' => 'Carian',
        'placeholder' => 'Cari kategori',
        'attribute' => 'carian'
      ]
    ],
    'select' => [
      'parent_category' => [
        'label' => 'Kategori induk',
        'placeholder' => 'Pilih kategori induk',
        'attribute' => 'kategori induk'
      ]
    ],
    'textarea' => [
      'description' => [
        'label' => 'Penerangan',
        'placeholder' => 'Masukkan penerangan',
        'attribute' => 'penerangan'
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
      'value' => 'Hapus'
    ],
    'cancel' => [
      'value' => 'Batal'
    ],
    'browse' => [
      'value' => 'Carian'
    ],
    'back' => [
      'value' => 'Kembali'
    ],
  ],
  'alert' => [
    'create' => [
      'title' => "Tambah kategori",
      'message' => [
        'success' => "Kategori berjaya disimpan.",
        'error' => "Terjadi ralat semasa menyimpan kategori. :error"
      ]
    ],
    'update' => [
      'title' => 'Ubah kategori',
      'message' => [
        'success' => "Kategori berjaya dikemas kini.",
        'error' => "Terjadi ralat semasa mengemaskini kategori. :error"
      ]
    ],
    'delete' => [
      'title' => 'Hapus kategori',
      'message' => [
        'confirm' => "Yakin untuk menghapus kategori :title ?",
        'success' => "Kategori berjaya dihapus",
        'error' => "Terjadi ralat semasa menghapus kategori. :error"
      ]
    ],
  ]
];