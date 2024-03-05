package main

import (
	"fmt"
	"net/http"

	"github.com/gin-gonic/gin"
	"gorm.io/driver/mysql"
	"gorm.io/gorm"
)

func main() {
	// r := gin.Default()
	// r.GET("/ping", func(c *gin.Context) {
	// 	c.JSON(http.StatusOK, gin.H{
	// 		"message": "pong",
	// 	})
	// })

	// r.Group("/api").
	// 	GET("/books", ListBooks).
	// 	POST("/books", CreateBook)

	// r.Run() // listen and serve on 0.0.0.0:8080 (for windows "localhost:8080")
	dsn := "root:@tcp(127.0.0.1:3306)/bookstore?charset=utf8mb4"
	db, err := gorm.Open(mysql.Open(dsn), &gorm.Config{})
	if err != nil {
		panic("failed to connect database")
	}
	fmt.Printf("db: %v\n", db)
	db.AutoMigrate(&Book{})
}
type Book struct {
	Id         uint   `gorm:"column:id;primarykey;"`
	Isbn       string `gorm:"column:isbn;type:varchar(20);"`
	Name       string `gorm:"column:name;type:varchar(300);"`
	AuthorName string `gorm:"column:author_name;type:varchar(300);"`
	Price      uint   `gorm:"column:price;"`
}

func ListBooks(c *gin.Context) {
	//
	c.JSON(http.StatusOK, gin.H{
		"result": []gin.H{
			{
				"book_id":     4123123,
				"isbn":        "1181865161",
				"name":        "PHP入門",
				"author_name": "Tommy",
				"price":       300,
			},
			{
				"book_id":     4,
				"isbn":        "1",
				"name":        "P",
				"author_name": "T",
				"price":       3,
			},
		},
	})
}

type CreateBookRequest struct {
	Insb       string `json:"isbn"`
	Name       string `json:"name"`
	AuthorName string `json:"author_name"`
	Price      int    `json:"price"` // 0
}

func CreateBook(c *gin.Context) {
	request := CreateBookRequest{}

	// 綁定 JSON 資料到結構體
	if err := c.ShouldBindJSON(&request); err != nil {
		c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
		return
	}

	fmt.Printf("ISBN : %v\n", request.Insb)
	fmt.Printf("Name : %v\n", request.Name)
	fmt.Printf("AuthorName : %v\n", request.AuthorName)
	fmt.Printf("Price : %v\n", request.Price)

	// Response
	c.JSON(http.StatusCreated, gin.H{
		"book_id":     4123123,
		"isbn":        "1181865161",
		"name":        "PHP入門",
		"author_name": "Tommy",
		"price":       300,
	})
}
