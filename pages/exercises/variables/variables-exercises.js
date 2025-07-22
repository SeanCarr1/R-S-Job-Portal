// variables-exercises.js
// Checks answers for the 'String Variable' exercise

// Import reusable utilities
// If using modules, use: import { isStringLiteral, isIsinstanceCheck, checkAnswers } from './exercise-utils.js';
// For now, include the script in HTML before this file.

document.addEventListener('DOMContentLoaded', function () {
    // String Variable Exercise (first form)
    const forms = document.querySelectorAll('.exercise-block-form');
    if (forms[0]) {
        forms[0].addEventListener('submit', function (e) {
            e.preventDefault();
            checkAnswers(forms[0], [
                isStringLiteral,
                v => isIsinstanceCheck(v, 'name', 'str')
            ]);
        });
    }
    // Float Variable Exercise (second form)
    if (forms[1]) {
        forms[1].addEventListener('submit', function (e) {
            e.preventDefault();
            checkAnswers(forms[1], [
                v => !isNaN(parseFloat(v)) && v.trim().indexOf(' ') === -1, // must be a float literal
                v => isIsinstanceCheck(v, 'price', 'float')
            ]);
        });
    }
    // Boolean Variable Exercise (third form)
    if (forms[2]) {
        forms[2].addEventListener('submit', function (e) {
            e.preventDefault();
            checkAnswers(forms[2], [
                v => v.trim() === 'True' || v.trim() === 'False',
                v => isIsinstanceCheck(v, 'is_valid', 'bool')
            ]);
        });
    }
});