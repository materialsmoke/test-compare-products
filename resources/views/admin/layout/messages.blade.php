<style>
    .alertSs {
      padding: 20px;
      color: white;
      background-color: red;
    }
    
    .closeBtnSs {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: .3s;
    }
    
    .closeBtnSs:hover {
      color: black;
      cursor: pointer;
    }
    
    .alert-dangerSs{
        color:#721c24;
      background-color: #F8D7DA;
    }
    
    .alert-infoSs{
        color: #383d41;
        background-color: #E2E3E5;
    }
    
    .alert-successSs{
        color: #155724;
        background-color: #D4EDDA;
    }
    
    .alert-warningSs{
        color: #856404;
        background-color: #FFF3CD;
    }
    </style>
    
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alertSs alert-dangerSs" style="margin: 1px">
                <span onclick="this.parentElement.style.display='none';" class="closeBtnSs"  >&times;</span>
                {{ $error }}
            </div>
        @endforeach
    @endif
    
    @if (Session::has('info'))
        <div class="alertSs alert-infoSs ">
            <span onclick="this.parentElement.style.display='none';" class="closeBtnSs" >&times;</span>
            {{ Session::get('info') }}
        </div>
    @endif
    
    @if (Session::get('error'))
        <div class="alertSs alert-dangerSs ">
            <span onclick="this.parentElement.style.display='none';" class="closeBtnSs" >&times;</span>
            {{ Session::get('error') }}
        </div>
    @endif
    
    
    @if (Session::get('danger'))
        <div class="alertSs alert-dangerSs ">
            <span onclick="this.parentElement.style.display='none';" class="closeBtnSs" >&times;</span>
            {{ Session::get('danger') }}
        </div>
    @endif
    
    @if (Session::has('success'))
        <div class="alertSs alert-successSs ">
            <span onclick="this.parentElement.style.display='none';" class="closeBtnSs" >&times;</span>
            {{ Session::get('success') }}
        </div>
    @endif
    
    @if (Session::has('warning'))
        <div class="alertSs alert-warningSs ">
            <span onclick="this.parentElement.style.display='none';" class="closeBtnSs" >&times;</span>
            {{ Session::get('warning') }}
        </div>
    @endif
    
    
    <script>
    let close = document.getElementsByClassName("closeBtnSs");
    let i;
    
    for (i = 0; i < close.length; i++) {
      close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
      }
    }
    </script>
    