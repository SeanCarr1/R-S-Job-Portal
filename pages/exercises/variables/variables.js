// Enable Next button only if all exercises are correct
document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.exercise-block-form');
    const finishBtn = document.querySelector('#finish-exercise-form button[type="submit"]');
    const finishForm = document.getElementById('finish-exercise-form');
    let completed = [false, false, false];
    function updateFinishBtn() {
        if (completed.every(Boolean)) {
            finishBtn.disabled = false;
            finishBtn.classList.remove('disabled');
        } else {
            finishBtn.disabled = true;
            finishBtn.classList.add('disabled');
        }
    }
    forms.forEach((form, idx) => {
        form.addEventListener('submit', function (e) {
            setTimeout(() => {
                // Check if all inputs have the 'correct' class
                const allCorrect = Array.from(form.querySelectorAll('input[type="text"]')).every(input => input.classList.contains('correct'));
                completed[idx] = allCorrect;
                updateFinishBtn();
            }, 10);
        });
    });
    updateFinishBtn();
    // Add tasks[] hidden inputs on submit
    finishForm.addEventListener('submit', function(e) {
        // Remove any previous tasks[]
        Array.from(finishForm.querySelectorAll('input[name^="tasks"]')).forEach(el => el.remove());
        completed.forEach((isDone, idx) => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'tasks[]';
            input.value = isDone ? '1' : '0';
            finishForm.appendChild(input);
        });
    });
});
