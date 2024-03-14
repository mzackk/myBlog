/*! Select2 4.0.13 | https://github.com/select2/select2/blob/master/LICENSE.md */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/id",[],function(){return{
    errorLoading:function(){return "Data tidak boleh dimuatkan."}, // Maintains "tidak boleh" for consistency
    inputTooLong:function(n){return "Hapuskan "+(n.input.length-n.maximum)+" aksara"}, // Changed "huruf" to "aksara" (more general term)
    inputTooShort:function(n){return "Masukkan "+(n.minimum-n.input.length)+" aksara lagi"}, // Changed "huruf" to "aksara"
    loadingMore:function(){return "Mencari data…"},
    maximumSelected:function(n){return "Anda hanya boleh memilih "+n.maximum+" pilihan"},
    noResults:function(){return "Tiada data yang sesuai"},
    searching:function(){return "Mencari…"},
    removeAllItems:function(){return "Hapus semua item"}
  }});n.define,n.require}();
  