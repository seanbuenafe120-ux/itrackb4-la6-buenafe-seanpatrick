## Self Assessment Questions

### Q1 Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.
A1: The featured route is placed before the detail route in web.php. If we swap them, Laravel will treat the word "featured" as an {id} parameter instead of a route. The controller will search for an item with id="featured" in our array, fail to find it, and return a 404 error.

### Q2 What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?
A2: If someone enters an ID that doesn't exist in our array, it will show a 404 page. In MovieController.php under the show method, we added an if condition using `!isset($movies[$id])` that calls `abort(404)` whenever the ID is not found.

### Q3 Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.
A3: Using route names makes it easier to update URLs later on without changing every view file. If we hardcoded URLs like `/movies/1` across our blade files and later changed the route path to `/watch/1` in web.php, all our navigation links would break and give 404 errors. With named routes, we only have to update it once in the route file.