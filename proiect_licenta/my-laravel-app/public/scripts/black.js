const darkModeToggle = document.getElementById('darkModeToggle');

        const setDarkModePreference = (value) => {
            localStorage.setItem('darkMode', value);
        };

        const getDarkModePreference = () => {
            return localStorage.getItem('darkMode');
        };

        const darkModePreference = getDarkModePreference();

        if (darkModePreference === 'true') {
            document.body.classList.add('dark-mode');
            darkModeToggle.checked = true;
        }

        darkModeToggle.addEventListener('change', () => {
            if (darkModeToggle.checked) {
                document.body.classList.add('dark-mode');
                setDarkModePreference(true);
            } else {
                document.body.classList.remove('dark-mode');
                setDarkModePreference(false);
            }
        });