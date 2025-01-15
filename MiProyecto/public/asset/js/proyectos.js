document.getElementById('filterCategory').addEventListener('change', filterProjects);
document.getElementById('filterLanguage').addEventListener('change', filterProjects);

function filterProjects() {
    const category = document.getElementById('filterCategory').value;
    const language = document.getElementById('filterLanguage').value;
    const projects = document.querySelectorAll('.project');

    projects.forEach(project => {
        const matchesCategory = category === 'all' || project.dataset.category === category;
        const matchesLanguage = language === 'all' || project.dataset.language === language;

        if (matchesCategory && matchesLanguage) {
            project.style.display = 'block';
        } else {
            project.style.display = 'none';
        }
    });
}
