@props(['skills', 'projects'])
<section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">My Latest Work</h2>
            <p class="subtitle">
               liste de mes 'Skills' et Mes 'Projects'.
            </p>
        </div>
    </div>
    <x-frontend.projects :skills="$skills" :projects="$projects" />
</section>
