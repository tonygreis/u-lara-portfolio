@props(['skills', 'projects'])
<div class="container mx-auto" x-data="{ selectedTab: 'all' }">
    <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
        <ul class="flex flex-col lg:flex-row justify-evenly items-center">
            <li class="cursor-pointer capitalize m-4">
                <button @click="selectedTab = 'all' "
                    class="flex text-center px-5 py-2 bg-light-tail-500 dark:bg-dark-navy-100 hover:bg-accent text-white rounded-md transition">All</button>
            </li>
            @foreach ($skills as $projectSkill)
                <li class="cursor-pointer capitalize m-4" x-data="{ projectSkill: {{ json_encode($projectSkill) }} }">
                    <button @click="selectedTab = projectSkill.id "
                        class="flex text-center px-5 py-2 bg-light-tail-500 dark:bg-dark-navy-100 hover:bg-accent text-white rounded-md transition">{{ $projectSkill->name }}</button>
                </li>
            @endforeach
        </ul>
    </nav>
    <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
        @foreach ($projects as $project)
            <x-frontend.project :project="$project" />
        @endforeach
    </section>
</div>
