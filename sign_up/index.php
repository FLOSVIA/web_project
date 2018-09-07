<!doctype html>
<html>
    <head>
        <title>sign up</title>
        <meta charset="utf-8">
        <script type="text/javascript">
            function check_pw(){
                // var pw = document.getElementById("pw").value;
                // var pw_c = document.getElementById("pw_c").value;
                
                if(document.getElementById("pw").value != document.getElementById("pw_c").value){
                    document.getElementById('pw_check').innerHTML = '비밀번호가 틀렸습니다. 다시 입력해 주세요';
                }
                else document.getElementById('pw_check').innerHTML = '';
            }
            function check(){
                if(document.getElementById('name').value ==''|| document.getElementById('name').trim.length == 0) {
                    alert('이름을 입력해주세요');
                    return false;
                }
                if(document.getElementById('id').value ==''|| document.getElementById('id').trim.length == 0) {
                    alert('아이디를 입력해주세요');
                    return false;
                }
                if(document.getElementById('pw').value ==''|| document.getElementById('pw').trim.length == 0) {
                    alert('패스워드를 입력해주세요');
                    return false;
                }
                if(document.getElementById('pw_c').value ==''|| document.getElementById('pw_c').trim.length == 0) {
                    alert('패스워드 확인을 입력해주세요');
                    return false;
                }
                if(document.getElementById('nick').value ==''|| document.getElementById('nick').trim.length == 0) {
                    alert('닉네임을 입력해주세요');
                    return false;
                }
                if(document.getElementById('birth').value ==''|| document.getElementById('birth').trim.length == 0) {
                    alert('생일을 입력해주세요');
                    return false;
                }
                if(is_nan(document.getElementById('birth').value)){
                    alert('생일은 숫자만 입력해주세요');
                    return false;
                }
            }
            function check_id(){
                window.name="sign up"
                var openWin = window.open("./login_check.php","check","width=570, height=350, resizable=no, scrollbars=no");
               // openWin.document.getElementById('id_check').value=document.getElementById('id').value;
           }
        </script>
    </head>
    <body>
        <form name="sign_up" method="post" action="./sign_up.php" onsubmit="return check()">
            <div>
                <label for="id"> NAME </label>
                <input type="text" name="name" id="name" placeholder="이름을 입력하세요"/>
            </div>
            <div>
                <label for="id"> ID </label>
                <input type="text" name="id" id="id" placeholder="아이디를 입력하세요"/>
                <input type="button" name="overlap_c" id="overlap_c" value="중복확인" onclick="check_id()"/>
            </div>
            <div>
                <label for="id"> PASSWORD </label>
                <input type="password" name="pwd" id="pw" placeholder="패스워드를 입력하세요" onchange="check_pw()"/>
            </div>
            <div>
                <label for="id"> PASSWORD COMFIRM </label>
                <input type="password" name="pwd_c" id="pw_c" placeholder="다시 한번 입력하세요" onchange="check_pw()"/>
                <p id="pw_check"></p>
            </div>
            <div>
                <label for="id"> NICKNAME </label>
                <input type="text" name="nick" id="nick" placeholder="닉네임을 입력하세요"/>
            </div>
            <div>
                <label for="id"> BIRTH DAY </label>
                <input type="text" name="birth" id="birth" size="25" placeholder="6자리로 입력하세요 ex)010101 "/>
            </div>
            <div class="button">
               <input type=submit value="submit"> 
            </div>
        </form>
    </body>
</html>

