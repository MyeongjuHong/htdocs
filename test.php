<div class="body">
    <div class="filter">
    <form name="test_form" method="post" action="test_check.php">
        <input type="submit" value=""/>
        <select name="grade">
            <option name="grade" value="">학년</option>
            <option name="grade" value="1">고1</option>
            <option name="grade" value="2">고2</option>
            <option name="grade" value="3">고3</option>
        </select>
        <select name="year">
            <option name="year" value="">년</option>
            <option name="year" value="2021">2021</option>
            <option name="year" value="2022">2022</option>
        </select>
        <select name="month">
            <option name="month" value="">월</option>
            <option name="month" value="3">3</option>
            <option name="month" value="10">10</option>
        </select>
        <input type="radio" name="paper" value="question" checked>문제만</input>
        <input type="radio" name="paper" value="answer">해설도</input>
    </form>
    </div>
    <div>시험지</div>
</div>