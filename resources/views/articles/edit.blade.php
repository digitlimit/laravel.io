@title('Edit your article')

@extends('layouts.default')

@section('subnav')
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl py-4 text-gray-900">
                <a href="{{ route('user.articles') }}">Your Articles</a>
                > <span class="break-all">{{ $title }}</span>
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <main class="max-w-4xl mx-auto pt-10 pb-12 px-4 lg:pb-16">
        <div class="lg:grid lg:gap-x-5">
            <div class="sm:px-6 lg:px-0 lg:col-span-9">
                <x-articles.form
                    :route="['articles.update', $article->slug()]"
                    method="PUT"
                    :article="$article"
                    :tags="$tags"
                    :selectedTags="$selectedTags"
                />
            </div>
        </div>
    </main>
@endsection
