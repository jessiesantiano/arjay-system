  <div id="addStudent" class="show fade hidden">
		<div class="fixed w-full h-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
			<div class="w-2/5 h-f ll relative flex  flex-col  bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
				<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
					<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Evaluate Trainee</h5>
					<button type="button"  data-toggle="modal" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
				</div>
			     <form action="reports.php" method="GET">
					<div class="relative flex-auto p-4">
						<div>
							<b>1-5</b> 
						</div>
  						<b>Masipag ? </b>
						<input type="text" placeholder="Masipag na bata" name="masipag" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
  						<b>Malupit ?</b>
						<input type="text" placeholder="Malupit na bata" name="malupit" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
						<input type="hidden" name="courseCode" value="<?php echo $_SESSION['courseCode']?>">
						<input type="hidden" name="Swcompany" value="<?php echo $courseCode?>">
						<div class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
							<button data-toggle="modal" type="submit" name="evaluate" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Proceed</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>