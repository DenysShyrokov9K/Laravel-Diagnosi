{{--File Upload--}}
<div id="file_upload_input" class="question-box" @if(isset($display)) style="display:{{$display}};" @endif>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="File Input" readonly>
    </div>
    <div class="form-group">
        <label for="Number of Files"> Nuermious of Files </label>
        <input type="number" class="form-control" min="1" id="num_files" name="num_files" placeholder="Please type number of files" value="1">
        <label style="margin-right: 20px;">Type of file</label><input type="text" name="type_files" id="type_files"><br>
        <label style="margin-right: 20px;">diemention of files</label><input type="text" name="demontion_files" id="demontion_files">
    </div>
</div>                          
{{-- End File Upload --}}