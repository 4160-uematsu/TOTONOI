<form method="post" action="/create" enctype="multipart/form-data">
	@csrf

	<div class="mt-10 text-center mx-auto text-2xl font-semibold">
		<div>
			<label>銭湯名</label><br/>
			<input type="text" name="companyname" value=""/>
		</div>
		
		<div>
			<label>Name</label><br/>
			<input type="text" name="author" value=""/>
		</div>
		
		<div>
			<label>Title</label><br/>
			<input type="text" name="title" value=""/>
		</div>

		<div>
			<label>Comment</label><br/>
			<textarea name="body"></textarea>
		</div>
                <div class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 mt-5 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                    <input type="file" id="selectFileSample1" name="image">ファイル選択
                </div>
                <div class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                    <input type="submit" value="">投稿する
                </div>
			</div>
	</div>
</form>