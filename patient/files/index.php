
<style>
#selectAll{
	top:0
}
</style>
<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Medical Records</h3>
		<div class="card-tools">
			 <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="file" id="fileInput" />
        <button type="submit" onclick="uploadFile()">Upload</button>
    </form>

    <script>
        function uploadFile() {
            const fileInput = document.getElementById('fileInput');
            const file = fileInput.files[0];

            if (file) {
                const formData = new FormData();
                formData.append('file', file);

                fetch('/upload', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                })
                .catch(error => {
                    console.error('Error uploading file:', error);
                });
            } else {
                console.error('No file selected.');
            }
        }
    </script><br>

	</div>
	
			<table class="table table-bordered table-stripped" id="indi-list">
				<colgroup>					
					<col width="75%">
					<col width="15%">	
				</colgroup>
				<thead>
					<tr class="text-center">						
						<th>File Name</th>						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
						$qry = $conn->query("SELECT * FROM file");
						while($row = $qry->fetch_assoc()):
					?>
					
						<tr>
							<td class="text-center">
							</td>	
							<td align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm">
				                  		<a class="dropdown-item view_data" href="javascript:void(0)" data-id="<?php echo $row['aid'] ?>"> View</a></button>	
				                  </button>
			                  
							</td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
