<!DOCTYPE html>

<head>
  

</head>


<body>

  
        <h1>Tambah About</h1>


        <form action="<?= site_url('about_store'); ?>" method="post">
           
            
         Judul :
                <input type="text" name="judul">
           
          Isi :
                
                <textarea name="isi" rows="4" cols="50">
                </textarea>

          Foto :
                <input type="file" id="myFile" name="filename">

          Reseller :
                <input type="text" name="reseller">   

          Kontak :
                
                <textarea name="kontak" rows="4" cols="50">
                </textarea>
                
            
          
                <button type="submit">Simpan</button>
        </form>

</body>



</html>
