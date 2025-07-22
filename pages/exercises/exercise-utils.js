// exercise-utils.js
// Reusable utility functions for exercise answer checking

// Checks if a value is a string literal (enclosed in quotes)
function isStringLiteral(val) {
    val = val.trim();
    return (
        (val.startsWith("'") && val.endsWith("'")) ||
        (val.startsWith('"') && val.endsWith('"'))
    );
}

// Checks if a value is a valid isinstance check for a variable and type
function isIsinstanceCheck(val, variable, type) {
    const cleaned = val.trim().replace(/\s+/g, '');
    return cleaned === `isinstance(${variable},${type})`;
}

// Generic answer checker for an exercise form
function checkAnswers(form, checks) {
    let allCorrect = true;
    const inputs = form.querySelectorAll('input[type="text"]');
    checks.forEach((check, i) => {
        const input = inputs[i];
        const result = check(input.value);
        // Remove previous state
        input.classList.remove('correct', 'incorrect');
        if (!result) {
            allCorrect = false;
            input.classList.add('incorrect');
        } else {
            input.classList.add('correct');
        }
    });
    const feedback = form.querySelector('.exercise-feedback');
    if (allCorrect) {
        feedback.textContent = '✅ Correct! Well done.';
        feedback.classList.add('success');
        feedback.classList.remove('error');
    } else {
        feedback.textContent = '❌ Some answers are incorrect. Try again!';
        feedback.classList.add('error');
        feedback.classList.remove('success');
    }
}
