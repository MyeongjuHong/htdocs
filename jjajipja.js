// join_form input confirm
function check_input() {
  if (!document.join_form.id.value) {
    alert("아이디를 입력하세요!");
    document.join_form.id.focus();
    return;
  }

  if (!document.join_form.pwd.value) {
    alert("비밀번호를 입력하세요!");
    document.join_form.pwd.focus();
    return;
  }

  if (!document.join_form.pwdC.value) {
    alert("비밀번호 확인을 입력하세요!");
    document.join_form.pwdC.focus();
    return;
  }

  if (document.join_form.pwdC.value != document.join_form.pwd.value) {
    alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요!");
    document.join_form.pwd.focus();
    document.join_form.pwd.select();
    return;
  }

  if (!document.join_form.name.value) {
    alert("이름을 입력하세요!");
    document.join_form.name.focus();
    return;
  }

  document.join_form.submit();
}

function check_id() {
  window.open("join_check.php?id=" + document.join_form.id.value, "IDcheck", "left=700, top=300, width=350, height=200, scrollbars=no, resizable=yes");
}
