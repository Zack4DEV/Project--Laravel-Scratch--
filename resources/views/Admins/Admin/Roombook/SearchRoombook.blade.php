<div class="searchsection">
    <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
    <button class="adduser" id="adduser" onclick="adduseropen()"><i class="fa-solid fa-bookmark"></i>Add</button>
    <form action="{{ redirect(route('exportdata)) }}" method="post">
    <button class="exportexcel" id="exportexcel" name="exportexcel" type="submit"><i class="fa-solid fa-file-arrow-down"></i></button>
    </form>
</div>
