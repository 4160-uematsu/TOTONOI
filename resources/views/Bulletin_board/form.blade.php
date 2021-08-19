<form method="post" action="/create" enctype="multipart/form-data">
		@csrf

		<div class="mt-10 text-xl font-semibold w-1/4 mx-auto text-center rounded-lg border-4 border-double border-indigo-500 p-10 bg-green-100">
			<p>銭湯名<input type="text" name="companyname" value="" placeholder="入力してください" class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/></label></p><br>
			
			<p>お名前<input type="text" name="author" value="" placeholder="入力してください" class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/></label></p><br>
		
			<p>タイトル<input type="text" name="title" value="" placeholder="入力してください" class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/></label></p><br>

			<p>コメント<textarea class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="comment" placeholder="入力してください" name="body" rows="5" cols="40"></textarea></label></p><br>

			<div class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 mt-5 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
				<input type="file" id="selectFileSample1" name="image">ファイル選択
			</div>
			<div class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
				<input type="submit" value="">投稿する
			</div>
		</div>
	</form>
</div>