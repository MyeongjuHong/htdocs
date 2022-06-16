function check_input() {
  if (!document.admin_form.grade.value) {
    alert("학년을 입력하세요!");
    document.admin_form.grade.focus();
  }

  if (!document.admin_form.year.value) {
    alert("년도를 입력하세요!");
    document.admin_form.year.focus();
  }

  if (!document.admin_form.month.value) {
    alert("월을 입력하세요!");
    document.admin_form.month.focus();
  }

  if (!document.admin_form.test_num.value) {
    alert("번호를 입력하세요!");
    document.admin_form.test_num.focus();
  }

  if (!document.admin_form.q_desc.value) {
    alert("지문을 입력하세요!");
    document.admin_form.q_desc.focus();
  }

  if (!document.admin_form.answer.value) {
    alert("정답을 입력하세요!");
    document.admin_form.answer.focus();
  }

  if (!document.admin_form.a_desc.value) {
    alert("해석 지문을 입력하세요!");
    document.admin_form.a_desc.focus();
  }

  document.admin_form.submit();
}
