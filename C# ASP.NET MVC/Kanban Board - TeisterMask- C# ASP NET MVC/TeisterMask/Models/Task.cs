using System.ComponentModel.DataAnnotations;

namespace TeisterMask.Models
{
    public class Task
    {
        [Key] //With and without it will work
        public int Id { get; set; }

        [Required] //-> Not null 
        [MinLength(1)] //-> non-empty text
        public string Title { get; set; }

        [Required]
        [MinLength(1)]
        public string Status { get; set; }
    }
}