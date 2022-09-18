<x-frontend-layout>
    {{-- Hero primary --}}
    <x-frontend.hero />
    {{-- Promote tail-100 --}}
    <x-frontend.promote />
    {{-- About Secondary --}}
    <x-frontend.about />
    {{-- Skills tail-100 --}}
    <x-frontend.skills :skills="$skills" />
    {{-- Portfolio primary --}}
    <x-frontend.portfolio :skills="$skills" :projects="$projects" />
    {{-- Services secondary --}}
    {{-- Contact primary --}}
</x-frontend-layout>
