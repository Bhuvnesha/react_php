<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>React in PHP Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div id="root"></div>

  <script src="https://cdn.jsdelivr.net/npm/react@17.0.2/umd/react.production.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@babel/standalone@7.15.0/babel.min.js"></script>

  <script type="text/babel">
    // Your React components and logic go here
    // For simplicity, let's render a basic React component
    const App = () => {
      return (
        <div>
          <h1>Hello, React in PHP with Bootstrap!</h1>
          <button className="btn btn-primary">Click Me</button>
        </div>
      );
    }

    ReactDOM.render(<App />, document.getElementById('root'));
  </script>
</body>
</html>
