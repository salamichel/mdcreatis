<section id="SC_ret_ac1" class="M20">

    <div class="T_DRG">

        <form name="form5" enctype="multipart/form-data" method="post" action="upload.php" />
        <p>
        	<input type="file" size="32" name="my_field" value="" id="xhr_field" />
	        <input type="hidden" name="action" value="xhr" />            
	        <button type="submit" class="B1 B_WHT R4" id="xhr_upload" name="submit_fourth">Télécharger la photo</button>
        </p>
        <div id="xhr_status"></div>
        
        </form>

        <div class="CLR">
            <article>
                <div id="xhr_result"></div>
                <div id="holder"></div> 
                <p id="upload" class="hidden"><label>Drag &amp; drop not supported, but you can still upload via this input field:<br><input type="file"></label></p>
                <p id="filereader">File API &amp; FileReader API not supported</p>
                <p id="formdata">XHR2's FormData is not supported</p>
                <p id="progress">XHR2's upload progress isn't supported</p>
                <p id="bar_progress">Progression du Téléchargement : <progress id="uploadprogress" min="0" max="100" value="0">0</progress></p>
            </article>
        </div>

        <script type="text/javascript">

            window.onload = function() {

                function xhr_send(f, e) {
                    if (f) {
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState == 4) {
                                document.getElementById(e).innerHTML = xhr.responseText;
                            }
                        }
                        xhr.open("POST", "upload.php?action=xhr");
                        xhr.setRequestHeader("Cache-Control", "no-cache");
                        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                        xhr.setRequestHeader("X-File-Name", f.name);
                        xhr.send(f);
                    }
                }

                function xhr_parse(f, e) {
                    if (f) {
                        document.getElementById(e).innerHTML = "Fichier selectionné : " + f.name + "(" + f.type + ", " + f.size + ")";
                    } else {
                        document.getElementById(e).innerHTML = "Aucun fichier selectionné!";
                    }
                }

                function dnd_hover(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    e.target.className = (e.type == "dragover" ? "hover" : "");
                }

                var xhr = new XMLHttpRequest();

                if (xhr && window.File && window.FileList) {

                    // xhr example
                    var xhr_file = null;
                    document.getElementById("xhr_field").onchange = function() {
                        xhr_file = this.files[0];
                        xhr_parse(xhr_file, "xhr_status");
                    }
                    document.getElementById("xhr_upload").onclick = function(e) {
                        e.preventDefault();
                        xhr_send(xhr_file, "xhr_result");
                    }

                    // drag and drop example
                    var dnd_file = null;
                    document.getElementById("dnd_drag").style.display = "block";
                    document.getElementById("dnd_field").style.display = "none";
                    document.getElementById("dnd_drag").ondragover = function(e) {
                        dnd_hover(e);
                    }
                    document.getElementById("dnd_drag").ondragleave = function(e) {
                        dnd_hover(e);
                    }
                    document.getElementById("dnd_drag").ondrop = function(e) {
                        dnd_hover(e);
                        var files = e.target.files || e.dataTransfer.files;
                        dnd_file = files[0];
                        xhr_parse(dnd_file, "dnd_status");
                    }
                    document.getElementById("dnd_field").onchange = function(e) {
                        dnd_file = this.files[0];
                        xhr_parse(dnd_file, "dnd_status");
                    }
                    document.getElementById("dnd_upload").onclick = function(e) {
                        e.preventDefault();
                        xhr_send(dnd_file, "dnd_result");
                    }

                }
            }
        </script>


        <script>
            var holder = document.getElementById('holder'),
                    tests = {
                filereader: typeof FileReader != 'undefined',
                dnd: 'draggable' in document.createElement('span'),
                formdata: !!window.FormData,
                progress: "upload" in new XMLHttpRequest
            },
            support = {
                filereader: document.getElementById('filereader'),
                formdata: document.getElementById('formdata'),
                progress: document.getElementById('progress')
            },
            acceptedTypes = {
                'image/png': true,
                'image/jpeg': true,
                'image/gif': true
            },
            progress = document.getElementById('uploadprogress'),
                    fileupload = document.getElementById('upload');

            "filereader formdata progress".split(' ').forEach(function(api) {
                if (tests[api] === false) {
                    support[api].className = 'fail';
                } else {
                    // FFS. I could have done el.hidden = true, but IE doesn't support
                    // hidden, so I tried to create a polyfill that would extend the
                    // Element.prototype, but then IE10 doesn't even give me access
                    // to the Element object. Brilliant.
                    support[api].className = 'hidden';
                }
            });

            function previewfile(file) {
                if (tests.filereader === true && acceptedTypes[file.type] === true) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var image = new Image();
                        image.src = event.target.result;
                        image.width = 150; // a fake resize
                        holder.appendChild(image);
                    };

                    reader.readAsDataURL(file);
                } else {
                    holder.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.size ? (file.size / 1024 | 0) + 'K' : '');
                    console.log(file);
                }
            }

            function readfiles(files) {
                //debugger;
                var formData = tests.formdata ? new FormData() : null;
                for (var i = 0; i < files.length; i++) {
                    if (tests.formdata)
                        formData.append('file[]', files[i]);
                    previewfile(files[i]);
                }

                // now post a new XHR request
                if (tests.formdata) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'dnd_upload.php');
                    xhr.onload = function() {
                        progress.value = progress.innerHTML = 100;
                    };

                    if (tests.progress) {
                        xhr.upload.onprogress = function(event) {
                            if (event.lengthComputable) {
                                var complete = (event.loaded / event.total * 100 | 0);
                                progress.value = progress.innerHTML = complete;
                            }
                        }
                    }

                    xhr.send(formData);
                }
            }

            if (tests.dnd) {
                holder.ondragover = function() {
                    this.className = 'hover';
                    return false;
                };
                holder.ondragend = function() {
                    this.className = '';
                    return false;
                };
                holder.ondrop = function(e) {
                    this.className = '';
                    e.preventDefault();
                    readfiles(e.dataTransfer.files);
                }
            } else {
                fileupload.className = 'hidden';
                fileupload.querySelector('input').onchange = function() {
                    readfiles(this.files);
                };
            }

        </script>
    </div>
</section>