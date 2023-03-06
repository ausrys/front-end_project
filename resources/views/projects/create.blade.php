

<div class="wrapper create-project">
    <h1>Create a project</h1>
    <form action="/projects" autocomplete="off" method="POST">
        @csrf
        <label for="pName">Project name:</label>
        <input type="text" id="pName" name="pName">
        <label for="summary">Project summary</label>
        <input type="text" name="summary" id="summary">
        <input type="password" name="password" id="password">
        <input type="submit" value = "sukurti" name="" id="">
    </form>


</div>