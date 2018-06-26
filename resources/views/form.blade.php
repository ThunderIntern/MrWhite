<!DOCTYPE html>
<html>
<head>
	<title>Simple Input Form</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
 <body>
    <form>
      <label>ID Catalog</label>
      <input type="text" name="id_catalog"><br>
      <label>barcode</label>
      <input type="text" name="barcode"><br>
      <label>harga</label>
      <input type="text" name="harga"><br>
      <label>deskripsi</label>
      <input type="text" name="deskripsi"><br>
      <label>gambar</label>
      <input type="text" name="url_gambar"><br>
{{--       <label>jenis perawatan</label>
      <input type="text" name="perawatan"><br>
      <label>brand</label>
      <input type="text" name="brand"><br>
      <label>bahan</label>
      <input type="text" name="bahan"><br> --}}
      <input type="submit" name="submit" value="submit"> 
    </form>	
<script type="text/javascript" src="{{mix('js/app.js')}} "></script>
</body>
</html>