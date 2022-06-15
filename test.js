function check_select() {
  if (document.test_form.grade == "0" || document.test_form.year.value == "0" || document.test_form.month.value == "0") {
    alert("시험지를 선택해주세요!");
    return;
  }

  document.test_form.submit();
}
