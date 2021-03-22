<html>

<head>
         <title>Form Input Transaksi</title>
</head>

<body bgcolor="#6666CC">
    <center>
        <form  action="<?=  base_url('transaksi/cetak');     ?>" 
          method="post" >
      <table>
         <tr>
            <th colspan="5">
              <hr>
                Toko Sepatu Ardi
             </th>
          </tr>
          <tr>
              <td colspan="5">
                   <hr>
               </td>
          </tr>
          <tr>
              <th>Nama Pembeli</th>
              <th>:</th>
              <td>
                  <input type="text" name="nama" id="nama">
             </td>
        </tr>
        <tr>
        <th>No Telp</th>
              <td>:</td>
              <td>
                  <input type="text" name="nomor" id="nomor">
             </td>
        </tr>

        <tr>
         <th>Merk Sepatu</th>
         <td>:</td>
         <td>
              <select name="merk" id="merk">
                <option value="">Pilih Merk Sepatu</option>
                <option value="Nike">Nike</option>
                <option value="Adidas">Adidas</option>
                <option value="Kickers">Kickers</option>
                <option value="Eiger">Eiger</option>
                <option value="Bucherri">Bucherri</option>
              </select>
            </td>
          </tr>

          <tr>
                <th>Ukuran</th>
                <td>:</td>
                <td>
                  <select name="size" id="size">
                          <option value="">Pilih Ukuran</option>
                          <option value="32">32</option>
                          <option value="33">33</option>
                          <option value="34">34</option> 
                          <option value="35">35</option>
                          <option value="36">36</option>
                          <option value="37">37</option>
                          <option value="38">38</option>
                          <option value="39">39</option>
                          <option value="40">40</option>
                          <option value="41">41</option>
                          <option value="42">42</option>
                          <option value="43">43</option>
                          <option value="44">44</option>
                 </select>
             </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="submit">
                <hr>
             </td>
         </tr>
      </table>
           </form>
         </center>
</body>

</html>

