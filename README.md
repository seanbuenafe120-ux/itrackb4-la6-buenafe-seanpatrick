# Lab Activity 7 Answers

### Q1. Why does the form use POST instead of GET?
The form uses POST because we are creating and adding new movie data. Using GET would show all input values in the URL bar, and refreshing the page could submit the form again and duplicate the movie. POST combined with a redirect prevents duplicate submissions.

### Q2. What stops the saving code when validation fails?
The `$request->validate()` method stops the execution if any validation rule fails. Laravel automatically throws a validation exception, cancels the rest of the method before saving, and redirects back to the form with the error messages and previous inputs.

### Q3. Why does the success message not appear on every page?
Because it uses Laravel's `with('success', ...)` flash data. Flash data is temporary and only exists in the session for the very next HTTP request. Once the page is refreshed or visited again, Laravel automatically clears it so the alert box goes away.