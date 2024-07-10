<header>
  <banner>
    <h1><?=$siteName?></h1>
  </banner>
  <nav>
    <a href='index.php'>HOME</a>
    <a id='loginBtn' href='javascript:loginDlgOpen();'>Login</a>
    <a id='loginBtn' href='javascript:signUpDlgOpen();'>Sign Up</a>
  </nav>
</header>
<dialog id='loginDlg'>
  <h1 class='title'>
    LOGIN
    <button class='btn' onclick='loginDlgClose();'>
      ×
    </button>
  </h1>
  <p>
    <input class='ipt' placeholder='ID'>
  </p>
  <p>
    <input class='ipt' type='password' placeholder='PASSWORD'>
  </p>
  <p>
    <button class='btn'>
      Login
    </button>
  </p>
</dialog>
<dialog id='signUpDlg'>
  <h1 class='title'>
    SIGN UP
    <button class='btn' onclick='signUpDlgClose();'>
      ×
    </button>
  </h1>
  <p>
    <input class='ipt' placeholder='ID'>
  </p>
  <p>
    <input class='ipt' type='password' placeholder='PASSWORD'>
  </p>
  <p>
    <input class='ipt' placeholder='NickName'>
  </p>
  <p>
    <button class='btn'>
      Sign Up
    </button>
  </p>
</dialog>
<script>
  const loginDlg = document.getElementById('loginDlg');
  const loginDlgOpen = ()=>loginDlg.open=true;
  const loginDlgClose = ()=>loginDlg.open=false;

  const signUpDlg = document.getElementById('signUpDlg');
  const signUpDlgOpen = ()=>signUpDlg.open=true;
  const signUpDlgClose = ()=>signUpDlg.open=false;
</script>