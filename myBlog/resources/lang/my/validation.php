<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => ':Attribute mesti diterima.',
    'active_url'           => ':Attribute bukan URL yang sah.',
    'after'                => ':Attribute mesti mengandungi tarikh selepas :date.',
    'after_or_equal'       => ':Attribute mesti mengandungi tarikh selepas atau sama dengan :date.',
    'alpha'                => ':Attribute hanya boleh mengandungi huruf.',
    'alpha_dash'           => ':Attribute hanya boleh mengandungi huruf, angka, tanda sengkang, dan garis bawah.',
    'alpha_num'            => ':Attribute hanya boleh mengandungi huruf dan angka.',
    'array'                => ':Attribute mesti mengandungi array.',
    'attached'             => ':Attribute telah dilampirkan.',
    'before'               => ':Attribute mesti mengandungi tarikh sebelum :date.',
    'before_or_equal'      => ':Attribute mesti mengandungi tarikh sebelum atau sama dengan :date.',
    'between'              => [
        'array'   => ':Attribute mesti mengandungi antara :min hingga :max anggota.',
        'file'    => ':Attribute mesti berukuran antara :min hingga :max kilobita.',
        'numeric' => ':Attribute mesti bernilai antara :min hingga :max.',
        'string'  => ':Attribute mesti mengandungi antara :min hingga :max aksara.',
    ],
    'boolean'              => ':Attribute mesti bernilai benar atau palsu',
    'confirmed'            => 'Pengesahan :attribute tidak sepadan.',
    'date'                 => ':Attribute bukan tarikh yang sah.',
    'date_equals'          => ':Attribute mesti mengandungi tarikh yang sama dengan :date.',
    'date_format'          => ':Attribute tidak sepadan dengan format :format.',
    'different'            => ':Attribute dan :other mesti berbeza.',
    'digits'               => ':Attribute mesti mengandungi :digits digit.',
    'digits_between'       => ':Attribute mesti mengandungi antara :min hingga :max digit.',
    'dimensions'           => ':Attribute tidak mengandungi dimensi imej yang sah.',
    'distinct'             => ':Attribute mempunyai nilai yang berulang.',
    'email'                => ':Attribute mesti merupakan alamat emel yang sah.',
    'ends_with'            => ':Attribute mesti berakhir dengan salah satu daripada: :values',
    'exists'               => ':Attribute yang dipilih tidak sah.',
    'file'                 => ':Attribute mesti merupakan fail.',
    'filled'               => ':Attribute mesti mempunyai nilai.',
    'gt'                   => [
        'array'   => ':Attribute mesti mengandungi lebih daripada :value anggota.',
        'file'    => ':Attribute mesti berukuran lebih besar daripada :value kilobita.',
        'numeric' => ':Attribute mesti bernilai lebih besar daripada :value.',
        'string'  => ':Attribute mesti mengandungi lebih banyak daripada :value aksara.',
    ],
    'gte'                  => [
        'array'   => ':Attribute mesti mengandungi :value anggota atau lebih.',
        'file'    => ':Attribute mesti berukuran lebih besar daripada atau sama dengan :value kilobita.',
        'numeric' => ':Attribute mesti bernilai lebih besar daripada atau sama dengan :value.',
        'string'  => ':Attribute mesti mengandungi lebih banyak daripada atau sama dengan :value aksara.',
    ],
    'image'                => ':Attribute mesti merupakan imej.',
    'in'                   => ':Attribute yang dipilih tidak sah.',
    'in_array'             => ':Attribute tidak wujud dalam :other.',
    'integer'              => ':Attribute mesti merupakan nombor bulat.',
    'ip'                   => ':Attribute mesti merupakan alamat IP yang sah.',
    'ipv4'                 => ':Attribute mesti merupakan alamat IPv4 yang sah.',
    'ipv6'                 => ':Attribute mesti merupakan alamat IPv6 yang sah.',
    'json'                 => ':Attribute mesti merupakan rentetan JSON yang sah.',
    'lt'                   => [
        'array'   => ':Attribute mesti mengandungi kurang daripada :value anggota.',
        'file'    => ':Attribute mesti berukuran kurang daripada :value kilobita.',
        'numeric' => ':Attribute mesti bernilai kurang daripada :value.',
        'string'  => ':Attribute mesti mengandungi kurang daripada :value aksara.',
    ],
    'lte'                  => [
        'array'   => ':Attribute mesti tidak mengandungi lebih daripada :value anggota.',
        'file'    => ':Attribute mesti berukuran kurang daripada atau sama dengan :value kilobita.',
        'numeric' => ':Attribute mesti bernilai kurang daripada atau sama dengan :value.',
        'string'  => ':Attribute mesti mengandungi kurang daripada atau sama dengan :value aksara.',
    ],
    'max'                  => [
        'array'   => ':Attribute tidak boleh mengandungi lebih daripada :max anggota.',
        'file'    => ':Attribute tidak boleh melebihi :max kilobita.',
        'numeric' => ':Attribute tidak boleh melebihi :max.',
        'string'  => ':Attribute tidak boleh melebihi :max aksara.',
    ],
    'mimes'                => ':Attribute mesti merupakan fail jenis: :values.',
    'mimetypes'            => ':Attribute mesti merupakan fail jenis: :values.',
    'min'                  => [
        'array'   => ':Attribute mesti mengandungi sekurang-kurangnya :min anggota.',
        'file'    => ':Attribute mesti sekurang-kurangnya :min kilobita.',
        'numeric' => ':Attribute mesti sekurang-kurangnya :min.',
        'string'  => ':Attribute mesti mengandungi sekurang-kurangnya :min aksara.',
    ],
    'multiple_of'          => ':Attribute mesti merupakan kelipatan daripada :value',
    'not_in'               => ':Attribute yang dipilih tidak sah.',
    'not_regex'            => 'Format :attribute tidak sah.',
    'numeric'              => ':Attribute mesti merupakan nombor.',
    'password'             => 'Kata laluan salah.',
    'present'              => ':Attribute mesti wujud.',
    'prohibited'           => ':Attribute tidak dibenarkan.',
    'prohibited_if'        => ':Attribute tidak dibenarkan jika :other adalah :value.',
    'prohibited_unless'    => ':Attribute tidak dibenarkan kecuali :other adalah :values.',
    'regex'                => 'Format :attribute tidak sah.',
    'relatable'            => ':Attribute mungkin tidak berkaitan dengan sumber ini.',
    'required'             => ':Attribute diperlukan.',
    'required_if'          => ':Attribute diperlukan apabila :other adalah :value.',
    'required_unless'      => ':Attribute diperlukan kecuali :other adalah :values.',
    'required_with'        => ':Attribute diperlukan apabila terdapat :values.',
    'required_with_all'    => ':Attribute diperlukan apabila terdapat :values.',
    'required_without'     => ':Attribute diperlukan apabila tiada :values.',
    'required_without_all' => ':Attribute diperlukan apabila tiada nilai :values.',
    'same'                 => ':Attribute dan :other mesti sama.',
    'size'                 => [
        'array'   => ':Attribute mesti mengandungi :size anggota.',
        'file'    => ':Attribute mesti berukuran :size kilobita.',
        'numeric' => ':Attribute mesti berukuran :size.',
        'string'  => ':Attribute mesti mengandungi :size aksara.',
    ],
    'starts_with'          => ':Attribute mesti bermula dengan salah satu daripada: :values',
    'string'               => ':Attribute mesti merupakan rentetan.',
    'timezone'             => ':Attribute mesti merupakan zon masa yang sah.',
    'unique'               => ':Attribute telah digunakan sebelum ini.',
    'uploaded'             => ':Attribute gagal dimuat naik.',
    'url'                  => 'Format :attribute tidak sah.',
    'uuid'                 => ':Attribute mesti merupakan UUID yang sah.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];

