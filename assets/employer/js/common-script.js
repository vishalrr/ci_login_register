function check_exists(table, id, col, val){
    alert();
    alert("<?= base_url() ?>");
      var url = "<?= base_url(employer/check-exists) ?>"+"/"+table+"/"+id+"/"+col+"/"+val;

      var exists = false;

      $.ajax({
        url: url,
        async: false,
        success: function(data){

          if(data.trim()) 
            exists = true;
        }
      });

      return exists;
}

