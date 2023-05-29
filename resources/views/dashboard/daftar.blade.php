@extends('layout')
@section('content')

<body>
  <div class="parent">
    <div class="container-fluid h-100 ">
  <div class="wrapper">
    <a href="/home"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="title">
    <h1><b>Form Pendaftaran PPDB</b></h1>
    <h4><b>SMK Wikrama Bogor TP. 2023-2024</b></h4>
    </div>
    <div class="form">
      <form action="{{route('daftar.input')}}" method="POST">
        @csrf

        {{-- alert --}}
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        {{-- end alert --}}

        {{-- inputan --}}
       <div class="inputfield">
          <label>NISN</label>
          <input type="text" class="input" name="nisn">
       </div>  

       <div class="inputfield">
        <label>JENIS KELAMIN</label>
        <div class="custom_select">
          <select name="jenisKelamin">
            <option >--Jenis Kelamin--</option>
            <option>Perempuan</option>
            <option>Laki-laki</option>
          </select>
        </div>
       </div> 

        <div class="inputfield">
          <label>NAMA</label>
          <input type="text" class="input" name="name">
        </div>  

        <div class="inputfield">
          <label>ASAL SEKOLAH</label>
          <div class="custom_select">
            <select name="asalSekolah" onchange="checkvalue(this.value)">
              <option >--Pilih Asal Sekolah--</option>
              <option >SMPN 01 CIAWI</option>
              <option >SMPN 02 CIAWI</option>
              <option >SMPN 03 CIAWI</option>
              <option value="others">Lainnya</option>
            </select>
          </div>
         </div> 
         <div class="row" id="other_text" style="display: none">
          <div class="form-group col-md-12">
              <label for="asal_sekolah_text" class="mb-2">Nama Sekolah</label>
              <input type="text" name="asal_sekolah_text" id="asal_sekolah_text" class="form-control"
                  placeholder="Masukkan Asal Sekolah">
          </div>
      </div>

       <div class="inputfield">
        <label>EMAIL</label>
        <input type="email" class="input" name="email">
       </div> 

      <div class="inputfield">
        <label>NOMOR HANDPHONE</label>
        <input type="text" class="input" name="nomor">
      </div>   

        <div class="inputfield">
          <label>NOMOR AYAH</label>
          <input type="text" class="input" name="noAyah">
       </div> 

       <div class="inputfield">
        <label>NOMOR IBU</label>
        <input type="text" class="input" name="noIbu">
       </div>

      {{-- <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
          </label>
      </div>  --}}

      <div class="inputfield">
        <input type="submit" value="Registrasi" class="btn">
      </div>
      {{-- end inputan --}}
      
    </div>
     </form>
  </div>	
    </div>
  </div>
</body>

<script> 
  function checkvalue(val) {
      if (val === "others") {
          document.getElementById('other_text').style.display = 'block';
      } else {
          document.getElementById('other_text').style.display = 'none';
      }
  }
</script>
  @endsection