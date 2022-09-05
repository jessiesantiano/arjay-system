<?php $accounts = mysqli_query($db, "SELECT * FROM accounts"); ?>
<?php while ($row = mysqli_fetch_array($accounts)) { ?>
    <div id="edit<?php echo $row['id']; ?>" class="show fade hidden">
		<div class="fixed w-full h-full top-0 left-0 flex justify-center items-center" style="background: rgba(0,0,0,0.5);">
			<div class="w-2/5 h-f ll relative flex  flex-col  bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
				<div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
					<h5 class="mb-0 leading-normal dark:text-white" id="ModalLabel">Edit Account</h5>
					<div>
						 <a href="process.php?del=<?php echo $row['id']; ?>">
						    <i style="margin-right: 10px" class="fa fa-trash w-4 h-4 box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer"></i>
						 </a>
						<button type="button" data-toggle="modal" class=" fa fa-close w-5 h-5  box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
					</div>
				</div>
			   <form action="process.php" method="POST">
					<div class="relative flex-auto p-4">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<b>Course Supervisor</b>
						<input type="text" placeholder="Name" name="name" value="<?php echo $row['name']?>" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
						<b>Email</b>
						<input type="text" placeholder="Email" name="email" value="<?php echo $row['email']?>" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
						<b>Password</b>
						<input type="text" placeholder="Password" name="password" value="<?php echo $row['password']?>" class="dark:bg-gray-950 mb-2 focus:shadow-soft-primary-outline dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
						<div class="flex flex-wrap items-center justify-end p-3 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
							<button  data-toggle="modal" type="submit" name="update" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>