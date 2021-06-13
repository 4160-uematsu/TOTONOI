<form method="post" action="/create" enctype="multipart/form-data">
	@csrf

	<div>
		<label>Name</label><br />
		<input type="text" name="author" value="" placeholder="お名前" />
	</div>

	<div>
		<label>Title</label><br />
		<input type="text" name="title" value="" placeholder="タイトル" />
	</div>

	<div>
		<label>Body</label><br />
		<textarea name="body"></textarea>
	</div>

    <div>
        <input type="file" name="image">
    </div>

    <input type="submit" value="投稿" /> 
</form>