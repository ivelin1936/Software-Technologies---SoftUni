using System.ComponentModel.DataAnnotations;
using System.Web.Mvc;

namespace IMDB.Models
{
    public class Film
    {
        [Key] //With and without it will work
        public int Id { get; set; }

        [Required] //-> Not null 
        [MinLength(1)] //-> non-empty text
        public string Name { get; set; }

        [Required]
        [MinLength(1)]
        public string Genre { get; set; }

        [Required]
        [MinLength(1)]
        public string Director { get; set; }

        [Required]
        [Range(1900, 2100)]
        public int Year { get; set; }
    }
}