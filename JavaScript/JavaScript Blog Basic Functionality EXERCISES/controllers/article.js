const Article = require('mongoose').model('Article');

module.exports = {
    createGet: (req, res) => {
        res.render('article/create');
    },

    createPost: (req, res) => {
        let articleArgs = req.body;

        let errorMsg = '';

        if (!req.isAuthenticated()) {
            errorMsg = 'You should be logged in to make articles!';
        } else if (!articleArgs.title) {
            errorMsg = 'Invalid title!';
        } else if (!articleArgs.content) {
            errorMsg = 'Invalid content!';
        }

        if (errorMsg) {
            res.render('article/create', {error: errorMsg});
            return;
        }

        articleArgs.author = req.user.id;
        Article.create(articleArgs).then(article => {
            req.user.articles.push(article.id);
            req.user.save(err => {
                if (err) {
                    res.redirect('/', {error: err.message});
                } else {
                    res.redirect('/');
                }
            });
        });
    },

    details: (req, res) => {
        let articleId = req.params.id;

        Article.findById(articleId)
            .populate('author')
            .then(article => {
                article.password = undefined;
                res.render('article/details', article);
            })
    },

    deleteGet: (req, res) => {
        if (!req.isAuthenticated()) {
            res.redirect('/user/login');
        } else {
            let articleId = req.params.id;
            Article.findByIdAndRemove(articleId)
                .then(deletedArticle => {
                    console.log(deletedArticle);
                    res.redirect('/');
                })
                .catch(err => {
                    let errorMessage = 'Can not find article with id';
                    res.redirect('/', { error: errorMessage });
                })
        }
    }
};
