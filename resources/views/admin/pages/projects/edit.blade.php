@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('admin.project.update', $project)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    {{-- da aggiungere l'old quando si sbaglia a compilare il form per non reinserire i dati di nuovo --}}

                    {{-- project title --}}
                    <label for="title" class="form-label">Project Title</label>
                    <input type="text" class="form-control mb-4 @error('title') is-invalid @enderror" id="title" name="title" max="25" value="{{ old('title') ?? $project->title }}">
                    {{-- error --}}
                    {{-- @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}

                    {{-- project description --}}
                    <label for="description" class="form-label">Project Description</label>
                    <textarea class="form-control mb-4 @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{ old('description') ?? $project->description }}</textarea>

                    {{-- type of project --}}
                    <label for="type" class="form-label">Type of Project</label>
                    <select class="form-select form-select-lg" name="type_id" id="type">
                        <option value="">-- Choose type of project --</option>
                        @foreach ($types as $el)
                            <option value="{{ $el->id }}"{{old('type_id', $project->type_id) == $el->id ? 'selected' : ''}}>{{ $el->name_type }}</option>
                        @endforeach
                    </select>

                    {{-- project buyer --}}
                    <label for="buyer" class="form-label">Project buyer</label>
                    <input type="text" class="form-control mb-4 @error('buyer') is-invalid @enderror" id="buyer" name="buyer" max="25" value="{{ old('buyer') ?? $project->buyer }}">

                    {{-- cover image --}}
                    <label for="cover_image" class="form-label">Cover Image</label>
                    <input type="file" class="form-control mb-4 @error('cover_image') is-invalid @enderror" id="cover_image" name="cover_image" value="{{ old('cover_image') ?? $project->cover_image }}">
                    
                    {{-- project date --}}
                    <label for="project_date" class="form-label">Project Date</label>
                    <input type="date" class="form-control mb-4" id="project_date" name="project_date" placeholder="Es: 2020-10-06" value="{{ old('project_date') ?? $project->project_date }}">

                    {{-- programming languages --}}
                    <label for="programming_languages" class="form-label">Project programming_languages</label>
                    <input type="text" class="form-control mb-4 @error('programming_languages') is-invalid @enderror" id="programming_languages" name="programming_languages" max="25" value="{{ old('programming_languages') ?? $project->programming_languages }}">

                    {{-- project link --}}
                    <label for="link" class="form-label">Project Link</label>
                    <textarea class="form-control mb-4 @error('title') is-invalid @enderror" name="link" id="link" rows="3">{{ old('link') ?? $project->link }}</textarea>
                   

                    <button type="submit" class="d-block btn btn-primary">Edit Project</button>
                </form>
            </div>
        </div>
    </div>
@endsection