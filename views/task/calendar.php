<div class="calendar" id="calendar">
    <div class="header">
        <span class="prev">&#9664;</span>
        <span class="month-year"></span>
        <span class="next">&#9654;</span>
    </div>
    <div class="days"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dateInput = document.getElementById('task-execute_date');
        const calendar = document.getElementById('calendar');
        const monthYear = calendar.querySelector('.month-year');
        const daysContainer = calendar.querySelector('.days');
        const prevButton = calendar.querySelector('.prev');
        const nextButton = calendar.querySelector('.next');

        let selectedDate = null;
        let currentMonth = new Date().getMonth();
        let currentYear = new Date().getFullYear();

        function renderCalendar(month, year) {
            monthYear.textContent = `${year}-${String(month + 1).padStart(2, '0')}`;
            daysContainer.innerHTML = '';

            const firstDay = new Date(year, month, 1).getDay();
            const lastDate = new Date(year, month + 1, 0).getDate();

            for (let i = 0; i < firstDay; i++) {
                daysContainer.insertAdjacentHTML('beforeend', '<div class="empty"></div>');
            }

            for (let date = 1; date <= lastDate; date++) {
                const dateElement = document.createElement('div');
                dateElement.textContent = date;
                dateElement.addEventListener('click', () => {
                    selectedDate = new Date(year, month, date);
                    dateInput.value = selectedDate.toISOString().split('T')[0];
                    calendar.style.display = 'none';
                });

                if (selectedDate && selectedDate.getDate() === date && selectedDate.getMonth() === month && selectedDate.getFullYear() === year) {
                    dateElement.classList.add('selected');
                }

                daysContainer.appendChild(dateElement);
            }
        }

        function showCalendar() {
            const rect = dateInput.getBoundingClientRect();
            calendar.style.top = `${rect.bottom + window.scrollY}px`;
            calendar.style.left = `${rect.left + window.scrollX}px`;
            calendar.style.display = 'block';
            renderCalendar(currentMonth, currentYear);
        }

        dateInput.addEventListener('focus', showCalendar);

        prevButton.addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar(currentMonth, currentYear);
        });

        nextButton.addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar(currentMonth, currentYear);
        });

        document.addEventListener('click', (event) => {
            if (!calendar.contains(event.target) && event.target !== dateInput) {
                calendar.style.display = 'none';
            }
        });

        renderCalendar(currentMonth, currentYear);
    });
</script>