using System.Collections;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace EF_Example_Nov_2017
{
    using System;
    using System.Data.Entity;
    using System.Linq;

    public class BlogNov2017 : DbContext
    {
        // Your context has been configured to use a 'BlogNov2017' connection string from your application's 
        // configuration file (App.config or Web.config). By default, this connection string targets the 
        // 'EF_Example_Nov_2017.BlogNov2017' database on your LocalDb instance. 
        // 
        // If you wish to target a different database and/or database provider, modify the 'BlogNov2017' 
        // connection string in the application configuration file.
        public BlogNov2017()
            : base("name=BlogNov2017")
        {
        }
         public virtual DbSet<User> Users { get; set; }
         public virtual DbSet<Article> Articles { get; set; }
    }

    public class User
    {
        public int Id { get; set; }

        [Required]
        [MaxLength(100)]
        [Index("User_Username_Unique", IsUnique = true)]
        public string Username { get; set; }

        public string PasswordHash { get; set; }

        public string FullName { get; set; }

        public ICollection<Article> Articles { get; set; }

        public User()
        {
            this.Articles = new List<Article>();
        }
    }

    public class Article
    {
        public int Id { get; set; }

        [Required]
        public string Title { get; set; }

        [Required]
        public string Content { get; set; }

        public DateTime? Date { get; set; }

        public int? AuthorId { get; set; }
        public User Author { get; set; }
    }
}