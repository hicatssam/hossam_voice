
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Voice Sample</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .container { padding: 50px 20px; }
        .card { border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); }
        .card-header { background: linear-gradient(135deg, #7F5AF0, #2CB67D); color: white; border-radius: 20px 20px 0 0!important; }
        .form-control, .form-select { border-radius: 10px; border: 2px solid #e3e3e3; transition: all 0.3s; }
        .form-control:focus, .form-select:focus { border-color: #7F5AF0; box-shadow: 0 0 0 0.2rem rgba(127, 90, 240, 0.25); }
        .btn-primary { background: linear-gradient(135deg, #7F5AF0, #2CB67D); border: none; border-radius: 25px; padding: 12px 30px; }
        .btn-secondary { border-radius: 25px; padding: 12px 30px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0"><i class="fas fa-microphone me-2"></i>Add New Voice Sample</h3>
                    </div>
                    <div class="card-body p-4">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('samples.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title (English) *</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                               id="title" name="title" value="{{ old('title') }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title_ar" class="form-label">Title (Arabic) *</label>
                                        <input type="text" class="form-control @error('title_ar') is-invalid @enderror"
                                               id="title_ar" name="title_ar" value="{{ old('title_ar') }}" required>
                                        @error('title_ar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category *</label>
                                        <select class="form-select @error('category') is-invalid @enderror"
                                                id="category" name="category" required>
                                            <option value="">Select Category</option>
                                            <option value="commercial" {{ old('category') == 'commercial' ? 'selected' : '' }}>Commercial</option>
                                            <option value="documentary" {{ old('category') == 'documentary' ? 'selected' : '' }}>Documentary</option>
                                            <option value="character" {{ old('category') == 'character' ? 'selected' : '' }}>Character</option>
                                            <option value="narration" {{ old('category') == 'narration' ? 'selected' : '' }}>Narration</option>
                                            <option value="educational" {{ old('category') == 'educational' ? 'selected' : '' }}>Educational</option>
                                            <option value="animation" {{ old('category') == 'animation' ? 'selected' : '' }}>Animation</option>
                                            <option value="audiobook" {{ old('category') == 'audiobook' ? 'selected' : '' }}>Audiobook</option>
                                            <option value="podcast" {{ old('category') == 'podcast' ? 'selected' : '' }}>Podcast</option>
                                        </select>
                                        @error('category')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="duration" class="form-label">Duration (seconds) *</label>
                                        <input type="number" class="form-control @error('duration') is-invalid @enderror"
                                               id="duration" name="duration" value="{{ old('duration') }}" min="1" required>
                                        @error('duration')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description (English) *</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description_ar" class="form-label">Description (Arabic) *</label>
                                <textarea class="form-control @error('description_ar') is-invalid @enderror"
                                          id="description_ar" name="description_ar" rows="3" required>{{ old('description_ar') }}</textarea>
                                @error('description_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="audio_file" class="form-label">Audio File *</label>
                                <input type="file" class="form-control @error('audio_file') is-invalid @enderror"
                                       id="audio_file" name="audio_file" accept=".mp3,.wav,.m4a" required>
                                <div class="form-text">Supported formats: MP3, WAV, M4A (Max: 10MB)</div>
                                @error('audio_file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="order" class="form-label">Display Order</label>
                                        <input type="number" class="form-control @error('order') is-invalid @enderror"
                                               id="order" name="order" value="{{ old('order', 0) }}" min="0">
                                        @error('order')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check mt-4">
                                            <input class="form-check-input" type="checkbox" id="is_featured"
                                                   name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_featured">
                                                <strong>Featured Sample</strong>
                                                <small class="d-block text-muted">Will appear on homepage</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Save Sample
                                </button>
                                <a href="{{ route('samples.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to List
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-calculate duration from audio file
        document.getElementById('audio_file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const audio = new Audio();
                const url = URL.createObjectURL(file);
                audio.src = url;
                audio.addEventListener('loadedmetadata', function() {
                    document.getElementById('duration').value = Math.round(audio.duration);
                    URL.revokeObjectURL(url);
                });
            }
        });
    </script>
</body>
</html>
