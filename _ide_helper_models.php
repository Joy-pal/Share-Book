<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Book
 *
 * @property int $book_id
 * @property int $book_user_id
 * @property string $book_name
 * @property string $book_slug
 * @property string $book_author
 * @property string|null $book_description
 * @property string $book_condition
 * @property float $book_price
 * @property int $book_price_negotiable
 * @property string $book_published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookPriceNegotiable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookPublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereBookUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Book whereUpdatedAt($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $address
 * @property string|null $contact
 * @property string|null $email_verified_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

