Questions & Answers

**Q1: You added a second filter without adding a single route. Explain why no new route was needed. Your answer should say something about what the router actually looks at.**

The router only looks at the main URL path (like `/movies`) to know which controller function to run. It completely ignores everything after the `?` symbol in the URL (the query string). Since filters are just query parameters, the same `/movies` route can handle filtering by genre, director, or both at the same time without needing new routes.

**Q2: Suppose you had built both filters as route parameters instead. Describe what the URL for 'year 4 only, no course filter' would have to look like, and why.**

If both filters were URL route parameters (like `/movies/{genre}/{director}`), filtering by director alone would look like `/movies/all/Christopher Nolan` or `/movies/_/Christopher Nolan`. A dummy placeholder is needed for the genre because route parameters depend on position. If you skip the first parameter, the router will think "Christopher Nolan" is the genre instead of the director.

**Q3: Your navigation link stays marked on a detail page and also when a filter is applied. Only one of those two needed a change to your pattern. Say which one, and why the other needed nothing.**

Only the detail page needed a change using `request()->is('movies*')`. This is because clicking a movie changes the URL path structure by adding an ID at the end (`/movies/1`). On the other hand, applying a filter (`/movies?genre=Sci-Fi`) keeps the main path as `/movies`, so `request()->is('movies')`) already matches it automatically.

**Q4: You deleted your old filter method but kept the empty store and update methods, even though none of the three can be reached by a URL. Explain the difference between them.**

The old filter method was removed because the new query-based filter replaced it, making it useless dead code. The empty `store` and `update` methods were kept because they are standard resource controller methods saved as placeholders for future lab features that aren't built yet.