using System;
using System.Collections.Generic;
using System.Linq;
using EF_Example_Nov_2017;

class Program
{
    static void Main()
    {
        var db = new BlogNov2017();

        db.Articles.Add(
            new Article()
            {
                Title = "Заглавие",
                Content = "Някакво съдържание",
                Author = new User()
                {
                    Username = "Dimitrov" + DateTime.Now,
                    FullName = "Bat Ivo",
                }
            }
        );

        db.SaveChanges();

//        var authorQuery = db.Articles.Include("Author");
//        Console.WriteLine("Query: " + authorQuery);
//
//        foreach (var a in authorQuery)
//        {
//            Console.WriteLine(a.Title + " " + a.Content);
//            Console.WriteLine(a.Author?.Username);
//            Console.WriteLine();
//        }

        var plovdivArticles = db.Articles.Where(s => s.Title.Contains("Пловдив")).OrderByDescending(s => s.Date);
        foreach (var article in plovdivArticles)
        {
            Console.WriteLine(article.Title + "\r\n" + article.Date);
            Console.WriteLine();
            article.Date = DateTime.Now;
        }
        db.SaveChanges();
    }
}
